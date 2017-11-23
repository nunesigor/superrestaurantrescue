<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Utility\Text;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Utility\Inflector;

class UploadComponent extends Component{
    
    public function upload($imagem = array(), $dir = 'img'){
        $dir = WWW_ROOT.$dir.DS.'upload'.DS;
        if(($imagem['error']!=0) and ($imagem['size']==0)) {
            throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '
                    .$imagem['error'].' e tamanho '.$imagem['size']);
        }
        $this->checa_dir($dir);
        $imagem = $this->checa_nome($imagem, $dir);
        $this->move_arquivos($imagem, $dir);
        return $imagem['name'];
    }
    
    public function checa_dir($dir){
        $folder = new Folder();
        if (!is_dir($dir)){
            $folder->create($dir);
        }
    }
    
    public function checa_nome($imagem, $dir){
        $imagem_info = pathinfo($dir.$imagem['name']);
        $extension = pathinfo($imagem['name'], PATHINFO_EXTENSION);
        $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$extension;
        debug($imagem_nome);
        $conta = 2;
        while (file_exists($dir.$imagem_nome)) {
            $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;
            $imagem_nome .= '.'.$imagem_info['extension'];
            $conta++;
            debug($imagem_nome);
        }
        $imagem['name'] = $imagem_nome;
        return $imagem;
    }
    
    public function trata_nome($imagem_nome){
        $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));
        $imagem_nome = Text::uuid().'-'.$imagem_nome;
        return $imagem_nome;
    }
    
    public function move_arquivos($imagem, $dir){
        $arquivo = new File($imagem['tmp_name']);
        $arquivo->copy($dir.$imagem['name']);
        $arquivo->close();
    }
    
    
    
}

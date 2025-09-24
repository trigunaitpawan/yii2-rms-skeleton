<?php
namespace app\common\components;

use Yii;
use yii\web\UploadedFile;
use yii\base\Component;

class FileUpload extends Component
{
    public $uploadPath = '@webroot/uploads';

    public function saveFile(UploadedFile $file, $subDir = '')
    {
        $base = Yii::getAlias($this->uploadPath);
        if ($subDir) {
            $base = rtrim($base, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . trim($subDir, '/');
            if (!is_dir($base)) mkdir($base, 0755, true);
        }
        $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9\._-]/', '_', $file->name);
        $full = $base . DIRECTORY_SEPARATOR . $fileName;
        if ($file->saveAs($full)) {
            $rel = '/uploads' . ($subDir ? '/' . trim($subDir,'/') : '') . '/' . $fileName;
            return $rel;
        }
        return false;
    }
}

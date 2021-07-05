<?php


function getFilesList(): array
{
    $rout = getRout();

    $storage = __DIR__ . '/storage';
    $dir = realpath("{$storage}/{$rout}");
    if (is_file($dir)){
        $dir = dirname($dir);
    }


    $files = scandir($dir);

    $disabledDirs = ['.', '.gitignore'];
    if (realpath($storage) === $dir) {
        $disabledDirs[] = '..';
    }

    $files = array_filter(
        $files,
        static fn ($file) => !in_array($file, $disabledDirs)
    );
    usort($files, 'sortFileType');
    return $files;
}

function renderFile()
{
    $rout = getRout();

    $storage = __DIR__ . '/storage';
    $file = realpath("{$storage}/{$rout}");
    if (!is_file($file)){
        return '';
    }

    $type = mime_content_type($file);
    switch ($type) {
        case 'image/jpeg':
            return renderImage($rout);

        case 'application/msword':
            return '<img src="public/word.jpg" alt="Word" width="100px">';

        case 'image/png';
            return renderImage($rout);

        case 'image/gif';
            return renderImage($rout);

        case 'application/pdf':
            return '<img src="public/pdf.png" alt="PDF" width="100px">';

        case 'application/zip':
            return '<img src="public/zip.jpeg" alt="ZIP" width="100px">';

        case 'video/mpeg':
            return '<img src="public/video.jpeg" alt="MPEG" width="100px">';

        case 'video/mp4':
            return '<img src="public/video.jpeg" alt="MP4" width="100px">';

        case 'audio/mpeg':
            return '<img src="public/music.jpg" alt="MP3" width="100px">';

        case 'audio/aac':
            return '<img src="public/music.jpg" alt="ACC" width="100px">';

        case 'audio/mp4':
            return '<img src="public/music.jpg" alt="MP4" width="100px">';

        default:
            return 'File type is not supported';
    }
}

function renderImage(string $rout): string
{
    return "<img src='actions/get-file.php?rout={$rout}' alt='{$rout}' width='100%'>";
}
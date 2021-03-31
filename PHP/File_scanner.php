/*
*
* Search directories except given in the exclude array.
*
/

$exclude = ['cache'];

$filter = function ($file, $key, $iterator) use ($exclude) {
    if ($iterator->hasChildren() && !in_array($file->getFilename(), $exclude)) {
        return true;
    }
    return $file->isFile();
};

$innerIterator = new \RecursiveDirectoryIterator(
    'Your directory',
    \RecursiveDirectoryIterator::SKIP_DOTS
);

$iterator = new \RecursiveIteratorIterator(
    new \RecursiveCallbackFilterIterator($innerIterator, $filter)
);

$scanArray = [];

foreach ($iterator as $item => $object)
{
    $scanArray[] = ["directory" => $item];
}

return $scanArray;

<?php

use Maikuolan\Common\Cache;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

try {
    $cache = new Cache();
    $cache->EnableAPCu = false;
    $cache->EnableMemcached = true;
    $cache->EnableRedis = false;
    $cache->EnablePDO = false;
    $cache->MemcachedHost = getenv('MEMCACHED_HOST');
    $cache->MemcachedPort = getenv('MEMCACHED_PORT');
    $cache->FFDefault = '';

    if (!$cache->connect()) {
        throw new Exception('Could not connect.');
    }

    $cache->setEntry('testing 1 2 3', 'Lorem ipsum blah blah blah', 3600);
    $cache->setEntry('testing 4 5 6', 'Hello world blah blah blah', 3600);

    var_dump($cache->getAllEntries());
} catch (Throwable $th) {
    echo $th->getMessage();
}

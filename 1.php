<?php

class BookingService
{
    private CacheInterface $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }





    public function youBookMeAllNightLong()
    {
        $cached = $this->cache->get('key');

        // ...

        foreach ($array as $value) {
            $cached = $this->cache->get($value);
        }

        $cached = $this->cache->getMultiple(['key1', 'key2', ...]);

        // ...
    }
}

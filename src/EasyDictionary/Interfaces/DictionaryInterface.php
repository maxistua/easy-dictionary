<?php

namespace EasyDictionary\Interfaces;

use Psr\SimpleCache\CacheInterface;

/**
 * Interface DictionaryInterface
 *
 * @package EasyDictionary
 */
interface DictionaryInterface extends \IteratorAggregate, \Countable, \ArrayAccess
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param $name
     * @return string
     */
    public function setName(string $name);

    /**
     * @param DataProviderInterface $provider
     */
    public function setDataProvider(DataProviderInterface $provider);

    /**
     * @param DataProviderFilterInterface $filter
     * @return mixed
     */
    public function setDataProviderFilter(DataProviderFilterInterface $filter = null);

    /**
     * @return DataProviderInterface
     */
    public function getDataProvider(): ?DataProviderInterface;

    /**
     * @param callable $view
     */
    public function setDefaultView(callable $view = null);

    /**
     * @param callable $callable
     * @return \Generator
     */
    public function withView(callable $callable = null);

    /**
     * @param CacheInterface $cache
     * @param int $ttl
     */
    public function setCache(CacheInterface $cache, int $ttl = 3600);

    /**
     * @param array $searchFields
     * @return mixed
     */
    public function setSearchFields(array $searchFields);

    /**
     * @param string $pattern
     * @param bool $strict
     * @return iterable
     */
    public function search(string $pattern, bool $strict = false): iterable;
}

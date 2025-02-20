<?php
class Collection implements Countable, ArrayAccess, Iterator
{
    public function __construct(
        private array $items = []
    )
    {}

    //Countable
    public function count(): int
    {
        return count($this->items);
    }

    //ArrayAccess
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->items[$offset]);
    }
    public function offsetGet(mixed $offset): mixed
    {
        return $this->items[$offset];
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if(is_null($offset)){
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }
    public function offsetUnset(mixed $offset): void
    {
        unset($this->items[$offset]);
    }

    //Iterator
    public function current(): mixed
    {
        return current($this->items);
    }
    public function next(): void
    {
        next($this->items);
    }
    public function key(): mixed
    {
        return key($this->items);
    }
    public function valid(): bool
    {
        return $this->key() !== null;
    }
    public function rewind(): void
    {
        reset($this->items);
    }

    //Collections
    public function add(mixed $key, mixed $value): void
    {
        $this->offsetSet($key, $value);
    }

    public function get(mixed $key): mixed
    {
        return $this->offsetGet($key);
    }

    public function contains(mixed $key): bool
    {
        return $this->offsetExists($key);
    }

    public function has(mixed $value): bool
    {
        return in_array($value, $this->items);
    }

    public function unset(mixed $key): void
    {
        $this->offsetUnset($key);
    }

    public function map(callable $callback): mixed
    {
        return array_map($callback, $this->items);
    }

    public function filter(callable $callback): mixed
    {
        return array_filter($this->items, $callback);
    }

    public function order(string $order = "asc"): mixed
    {
        if($order === "desc"){
            return rsort($this->items);

        } else {
            return sort($this->items);
        }
    }
}

?>
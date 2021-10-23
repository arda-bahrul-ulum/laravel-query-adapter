<?php

namespace GhoniJee\DxAdapter\Actions;

trait SerializeData
{
    protected function serializeData(string $key)
    {
        if (is_string($this->{$key})) {
            return json_decode($this->replaceSingleQuote($key));
        }

        return $this->request->{$key};
    }

    private function replaceSingleQuote(string $key): string
    {
        return str_replace("'", '"', $this->request->$key);
    }
}

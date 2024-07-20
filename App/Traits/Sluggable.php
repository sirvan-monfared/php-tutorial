<?php

namespace App\Traits;

trait Sluggable
{
    public function slugify(string $slug, ?int $except_id = null): string
    {
        $slug = str_replace(" ", "-", $slug);

        $condition = true;
        $counter = 1;
        while($condition) {

            $values = ['slug' => $slug];
            $sql = "SELECT count(`id`) AS count FROM {$this->table} WHERE `slug`=:slug ";
            if ($except_id) {
                $sql .= " AND `id`!=:id ";
                $values['id'] = $except_id;
            }
            $sql .= " ORDER BY id DESC LIMIT 1";

            $count = $this->db->prepare($sql, $values, __CLASS__)->find()->count;

            if (! $count) {
                $condition = false;
            } else {
                if (preg_match('/-[1-9]$/', $slug)) {
                    $slug = preg_replace('/-[1-9]$/', "-{$counter}", $slug);
                } else {
                    $slug .= "-{$counter}";
                }

                $counter++;
            }
        }

        return $slug;
    }
}
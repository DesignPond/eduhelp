<?php namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MapImport implements ToArray, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function headings(): array {
        return [
            'cls', 'zotero', 'type_id', 'display', 'rank', 'display', 'rank'
        ];
    }

    /**
     * @param array $row
     *
     * @return Client|null
     */
    public function array(array $row)
    {
        if(!empty(array_filter($row))){
            return [
                'cls'      => isset($row[0]) && !empty($row[0]) ? $row[0] : null,
                'zotero'   => isset($row[1]) && !empty($row[1]) ? $row[1] : null,
                'type_id'  => isset($row[2]) && !empty($row[2]) ? $row[2] : null,
                'display'  => isset($row[3]) && !empty($row[3]) ? $row[3] : null,
                'rank'     => isset($row[4]) && !empty($row[4]) ? $row[4] : null,
                'display'  => isset($row[5]) && !empty($row[5]) ? $row[5] : null,
                'rank'     => isset($row[6]) && !empty($row[6]) ? $row[6] : null,
            ];
        }
    }
}
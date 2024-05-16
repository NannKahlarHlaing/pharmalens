<?php
namespace App\Enums;
enum Category: int
{
    case others = 0;
    case import = 1;
    case export = 2;
    

    public function description(): string{
        return match($this)
        {
            self::others => 'Others',
            self::import => 'Import Items',
            self::export => 'Export Items',
        };
    }
}
?>

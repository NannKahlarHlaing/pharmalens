<?php
namespace App\Enums;
enum Category: int
{
    case others = 0;
    case raw = 1;
    case herb_powder = 2;
    case herb_tablet = 3;
    

    public function description(): string{
        return match($this)
        {
            self::others => 'Others',
            self::raw => 'Raw for Herbal Medicine',
            self::herb_powder => 'Herb Powder',
            self::herb_tablet => 'Herb Tablet',
        };
    }
}
?>

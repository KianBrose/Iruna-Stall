<?php

namespace App\Console\Commands;

use App\Irunaitem;
use App\Traits\IrunaDatabaseTrait;
use Illuminate\Console\Command;

class IrunaCrawlCommand extends Command
{
    use IrunaDatabaseTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iruna:crawl {category?} {--guide}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl iruna data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(!$this->option('guide')) {
            $category = $this->argument('category');
            $updateCategory = $this->handleInput($category);

            $items = $this->searchCategory($category);
            $this->update($items, $updateCategory);
        } else {
            $categoryList = $this->getAllAvailableCategory();
            $this->info('You may pass an argument so that we know what type of items you want to update');
            $this->info('Available category: ');
            foreach($categoryList as $category){
                $this->line($category);
            }
            $this->info('For example: php artisan iruna:crawl status');

        }
        
        
        

    }

    private function searchCategory($category){
        return Irunaitem::where('category', $category)->get();
    }

    private function update($model, $updateItems) {
        foreach($model as $items) {
                $this->info('Updating for '.$items);
                foreach($updateItems as $desc){
                    if(trim($desc[0]) == $items->name) {
                        $this->line('Changing description of '.$items->name. ' to '.str_replace('\n', "", $desc[2]));
                        $items->description = str_replace('\n', "", $desc[2]);
                        $items->save();
                    }
                }
            
        }
        
        foreach($updateItems as $item){
            if(Irunaitem::where('name', $item[0])->count() == 0) {
                $this->info('Adding new items values: '.$item[0].' '.$item[1].' '.$item[2]);
                Irunaitem::create([
                    'name' => trim($item[0]),
                    'category' => $item[1],
                    'description' => str_replace('\n', "", $desc[2])
                ]);

            }
        }
    }

    /**
     * Handle user argument
     * 
     * @param string $input
     * 
     * @return App\Irunaitem
     */
    private function handleInput($input)
    {
        switch(strtolower($input)){
            case "status":
                return IrunaDatabaseTrait::getUpdateStatusItem();
                break;
        }
    }

    private function getAllAvailableCategory()
    {
        return ['Status', 'Throwing', 'Collectibles', 'Crystas'];
    }
}

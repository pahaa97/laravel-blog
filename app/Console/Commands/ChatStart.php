<?php

namespace App\Console\Commands;

use Workerman\Worker;
use Illuminate\Console\Command;

class ChatStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat1:work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        dd(1);
        $wsWorker = new Worker('websocket://0.0.0.0:2346');
        $wsWorker->count = 4;
        $wsWorker->onConnect = function ($connection) {
            echo "New connection\n";
        };

        $wsWorker->onMessage = function ($connection, $data) use ($wsWorker) {
            foreach ($wsWorker->connections as $clientConnection) {
                $clientConnection->send($data);
            }
        };

        $wsWorker->onClose = function ($connection) {
            echo "Connection closed\n";
        };
//        $chats = auth()->user()->chats;
        Worker::runAll();
    }
}

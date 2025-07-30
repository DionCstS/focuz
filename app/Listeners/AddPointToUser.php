<?php

namespace App\Listeners;

use App\Events\TaskCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AddPointToUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskCompleted $event): void
    {
        $task = $event->task;

        if (!$task->user){
            Log::warning('Nenhum usuário associado à tarefa ID: ' . $task->id . '. Não e possível adcionar/remover pontos.');
            return;
        }

        $user = $task->user;

        if ($task->is_completed && !$task->points_awarded) {
            $task->user->increment('points');
            $task->points_awarded = true;
            $task->save();
            Log::info('Ponto ADICIONADO para o usuário ID: '. $user->id . ' pela tarefa ID: ' . $task->id);
        } elseif (!$task->is_completed && $task->points_awarded) {
            if ($user->points > 0) {
                $user->decrement('points');
            }
            $task->points_awarded = false;
            $task->save();
            Log::info('Ponto REMOVIDO para o usuário ID: ' . $user->id . ' pela tarefa ID:' . $task->id);
        } else {
            Log::info('Nenhuma alteração de ponto necessária para a tarefa ID:' . $task->id . ' is_completed: ' . ($task->is_completed ? 'true' : 'false') . ', points_awarded: ' . ($task->points_awarded ? 'true' : 'false'));
        }
    }
}

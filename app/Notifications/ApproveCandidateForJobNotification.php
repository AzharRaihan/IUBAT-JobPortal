<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApproveCandidateForJobNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $findJob;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($findJob)
    {
        $this->findJob = $findJob;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello')
            ->subject('Your Job Application has been reviewed')
            ->line('You are selected for '. $this->findJob->job_title . ' Job')
            ->line('Congratulations !!!')
            ->line('Thank you For Using Our Application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    public function conversations()
    {
        return Conversation::where(function ($query) {
            $query->where('sender_id', $this->id)
                ->orWhere('receiver_id', $this->id);
        })
            ->with(['message'])
            ->latest();
    }
    public function unreadConversations()
    {
        return Conversation::where(function ($query) {
            $query->where('sender_id', $this->id)
                ->orWhere('receiver_id', $this->id);
        })
            ->whereHas('message', function ($q) {
                $q->where('read', 0)
                    ->where('receiver_id', auth()->id()); // Only unread *to* this user
            })
            ->with(['message' => function ($q) {
                $q->where('read', 0)
                    ->where('receiver_id', auth()->id()); // Also eager load only unread
            }])
            ->latest()
            ->get();
    }
    public function getConversations()
    {
        return $this->conversations()->get();
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'country',
        'city',
        'is_online'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

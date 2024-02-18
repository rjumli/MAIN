<?php

namespace App\Http\Resources\Utility;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogAuthenticationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $agent = new Agent();
        $agent->setUserAgent($this->user_agent);

        if($agent->isDesktop()){
            $type = 'computer';
        }else if($agent->isMobile()){
            $type = 'smartphone';
        }else if($agent->isTablet()){
            $type = 'tablet';
        }

        return [
            'ip' => ($this->ip_address == '::1') ? '127.0.0.1' : $this->ip_address,
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'browser' =>  $agent->browser(),
            'is_desktop' => $agent->isDesktop(),
            'attempt' => ($this->login_successful) ? 'text-success' : 'text-danger',
            'is_attempt' => $this->login_successful,
            'name' => $this->user->profile->firstname.' '. $this->user->profile->lastname,
            'is_active' => $this->user->is_active,
            'role' => $this->user->role,
            'login_at' => ($this->login_at != null) ? date('M d, Y g:i a', strtotime($this->login_at)) : 'n/a',
            'logout_at' => ($this->logout_at != null) ? date('M d, Y g:i a', strtotime($this->logout_at)) : 'n/a',
            'type' => $type,
            'location' => $this->location
        ];
    }
}

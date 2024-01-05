<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        $sharedData = parent::share($request);

        if ($request->user()) {
            $sharedData['auth'] = $this->getAuthUser($request->user());
        }

        if ($request->session()->has('flash')) {
            $sharedData['flash'] = $request->session()->get('flash');
        }

        return array_merge($sharedData, [
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                    'previous' => url()->previous(),
                ]);
            },
        ]);
    }

    public function getAuthUser(User $user) : array
    {
        return [
            'user' => [
                'id' => $user->id,
                'is_root' => in_array($user->email, config('auth.roles.root')),
                'name' => $user->name,
                'email' => $user->email,
                'current_team_id' => $user->current_team_id,
                'current_team' => $user->currentTeam,
                'all_teams' => $user->teams,
                'profile_photo_path' => $user->profile_photo_path,
                'profile_photo_url' => $user->profilePhotoUrl(),
                'created_at' => $user->created_at,
            ],
        ];
    }
}

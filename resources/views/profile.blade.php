<x-app-layout>
    <x-container>

        @if( !auth()->user()->isRelated($user) )

        <form action="{{ route('friends.store', $user) }}" method="POST" class="px-4 mb-8">
            @csrf
            
            <x-submit-button>
                Add friend
            </x-submit-button>

        </form>
        @endif

        @foreach($posts as  $post)
        <x-card class="mb-4">
            {{ $post->body}}

            <div class="text-xs text-slate-500">
                {{ $post->created_at->diffForHumans()}}
            </div>
        </x-card>
        @endforeach
    </x-container>
</x-app-layout>

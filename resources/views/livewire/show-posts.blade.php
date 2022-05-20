<div>
    Hello {{ $post['title'] }}
    <div>
        <form wire:submit.prevent="update">
            <input wire:model.defer="input.title">
            <button>Save</button>
        </form>
    </div>
    <div>
        Counter {{ $post['count'] }}
    </div>
</div>

<div>
    <div>
        <x-alert></x-alert>
    </div>
    <x-data-table title="Contact">
        @slot('action')
            <x-modal title="Add Employee">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control mb-2" wire:model.defer="employee.name">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Position</label>
                        <input type="text" class="form-control mb-2" wire:model.defer="employee.position">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Email</label>
                        <input type="text" class="form-control mb-2" wire:model.defer="employee.email">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Salary</label>
                        <input type="number" class="form-control mb-2" wire:model.defer="employee.salary">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Status</label>
                        <input type="text" class="form-control mb-2" wire:model.defer="employee.status">
                    </div>
                </div>
                @slot('action')
                    <button type="button" class="btn btn-primary" wire:click="save">Save</button>
                @endslot
            </x-modal>
        @endslot
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->salary }}</td>
                    <td><span class="badge bg-success">{{ $item->status }}</span></td>
                    <td>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})"
                                style="margin-right: 5px">Delete</button>
                            <button class="btn btn-sm btn-warning" wire:click="edit({{ $item->id }})">Edit</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-data-table>
</div>

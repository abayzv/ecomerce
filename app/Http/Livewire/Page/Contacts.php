<?php

namespace App\Http\Livewire\Page;

use App\Models\Employee;
use Livewire\Component;

class Contacts extends Component
{ 
    public $employees;
    public Employee $employee;
    protected $rules = [
        'employee.name' => 'required',
        'employee.position' => 'required',
        'employee.email' => 'required',
        'employee.salary' => 'required',
        'employee.status' => 'required',
    ];
    public function mount(Employee $employees)
    {
        $this->employees = Employee::all();
        $this->employee = new Employee();
    }
    public function save()
    {
        // edit employee if id is set
        if ($this->employee->id) {
            $this->employee->update();
        } else {
            $this->employee->save();
        }
        $this->employee = new Employee();
        $this->employees = Employee::all();
        $this->emit('success');
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message', 'Emplyoee Successfully Added');
    }
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        $this->employees = Employee::all();
        $this->dispatchBrowserEvent('renderDatatable');
        session()->flash('message', 'Emplyoee Successfully Deleted');
    }
    public function edit($id)
    {
        $this->employee = Employee::find($id);
        $this->dispatchBrowserEvent('openModal');
        
    }
    public function render()
    {
        return view('livewire.page.contacts')->layout('layouts.admin');;
    }
}

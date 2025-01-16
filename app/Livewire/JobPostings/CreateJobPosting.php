<?php

namespace App\Livewire\JobPostings;

use Livewire\Component;
use App\Models\JobPosting;

class CreateJobPosting extends Component
{
    public $title;
    public $date_posted;
    public $base_salary;
    public $salary_currency;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'date_posted' => 'required|date',
            'base_salary' => 'decimal:2',
            'salary_currency' => 'string|size:3'
        ];

    }

    public function save()
    {
        $this->validate();

        JobPosting::create([
            'title' => $this->title,
            'date_posted' => $this->date_posted,
            'base_salary' => $this->base_salary,
            'salary_currency' => $this->salary_currency,
        ]);

        return redirect()->to('/jobs')
            ->with('status', 'Job created');
    }

    public function render()
    {
        return view('livewire.job-postings.create-job-posting');
    }
}

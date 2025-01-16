<?php

namespace App\Livewire\JobPostings;

use Livewire\Component;
use App\Models\JobPosting;
use Livewire\WithPagination;

class ListJobPostings extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.job-postings.list-job-postings', [
            'job_postings' => JobPosting::paginate(10)
        ]);
    }
}

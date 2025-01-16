<div>
    <h3>Job Postings</h3>
    @foreach($job_postings as $job_posting)
        <p>{{ $job_posting->title }}</p>
    @endforeach

    {{ $job_postings->links() }}
</div>

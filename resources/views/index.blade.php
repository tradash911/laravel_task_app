<h1>
    hello im a blade template!

</h1>
<div class="">

    
    <p>there are tasks</p>
    <ul>
        @forelse($tasks as $task )
            <!-- <li>{{ $task -> title }}</li> -->
             <a href="{{ route('task.show',['id'=>$task->id]) }}">{{ $task->title }}</a>
            @empty 
            <li>There is no tasks</li>
        @endforelse
    </ul>
    
   
</div>
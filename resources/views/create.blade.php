create a task!

<div class="">
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label for="title">title</label>
        <input id="title" name="title" type="text">
        <label for="description">Description</label>
        <textarea name="desctription" id="description" rows="5" ></textarea>
        <label for="long_description">Long Description</label>
        <textarea name="long_desctription" id="long_description" rows="10s" ></textarea>
        <button type="submit" >Submit</button>
    </form>
</div>
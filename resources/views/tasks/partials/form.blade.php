<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''}}" value="{{ old('title') ?? $task->title }}">
    {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')!!}
</div>

<div class="form-group">
    <select name="subject1_id" id="subject1_id" class="form-control{{ $errors->has('subject1_id') ? ' is-invalid' : ''}}">
         <option disabled selected>Pilih Satu</option>

         @foreach ($subject1s as $subject1)
             <option {{ $task->subject1_id == $subject1->id ? "selected" : "" }} value="{{ $subject1->id }}">{{ $subject1->nama }}</option>
         @endforeach
    </select>
    {!! $errors->first('subject1_id', '<span class="invalid-feedback">:message</span>')!!}
   
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="3" class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}">{{ old('title') ?? $task->description }}</textarea>
        {!! $errors->first('description', '<span class="invalid-feedback">:message</span>')!!}
</div> 
<button type="submit" class="btn btn-primary">{{ $submit_button }}</button>
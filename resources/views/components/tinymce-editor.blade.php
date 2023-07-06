@props(['name', 'class' => 'form-control'])
<textarea name="{{ $name }}" class="{{ $class }}" id="tinyeditorinstance">{!! $slot !!}</textarea>

@foreach(App\Enums\CommentStatus::cases() as $commentStatus)
    <option value="{{ $commentStatus->value }}" @selected((int) $value === $commentStatus->value)>{{ $commentStatus->translate() }}</option>
@endforeach

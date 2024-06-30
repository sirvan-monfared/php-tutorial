<option value="{{ App\Models\Comment::PENDING }}" @selected((int) $value === App\Models\Comment::PENDING)>در دست بررسی</option>
<option value="{{ App\Models\Comment::ACCEPTED }}" @selected((int) $value === App\Models\Comment::ACCEPTED)>تایید شده</option>
<option value="{{ App\Models\Comment::SPAM }}" @selected((int) $value === App\Models\Comment::SPAM)>هرزنامه</option>
@foreach ($levels as $levelList)

    <option value="{{ $levelList->id ?? '' }}"

        @isset($group->level_id)

            @if ($group->level_id == $levelList->id)
                selected=""
            @endif

            @if ($group->level_id == $levelList->id)
                hidden=""
            @endif

				@endisset
		>
		{{$levelList->name}}
    </option>

@endforeach
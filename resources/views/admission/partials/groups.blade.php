@foreach ($groups as $groupList)

    <option value="{{ $groupList->id ?? '' }}"

        @isset($group->id)

            @if ($group->parent_id == $groupList->id)
                selected=""
            @endif

            @if ($group->id == $groupList->id)
                hidden=""
            @endif

        @endisset

    >
    {{ $delimiter ?? '' }}{{ $groupList->title ?? '' }}
    </option>

    @isset ($groupList->children)

        @include('admission.partials.groups', [
            'groups' => $groupList->children,
            'delimiter'  => ' - ' . $delimiter
        ])

    @endif

@endforeach
@extends('layout')

@section('content')
    <table class="w-full">
        <tr class="table-auto text-gray-500 text-xl">
            <th class="text-start pl-8 font-bold text-2xl">#</th>
            <th class="text-start pl-8 font-bold text-2xl">Name</th>
            <th class="text-start pl-8 font-bold text-2xl">Email</th>
            <th class="text-start pl-8 font-bold text-2xl">Joined</th>
        </tr>
        <tr class="text-xl border border-spacing-2 border-gray-500 p-2">
            <td class="border border-spacing-2 border-gray-500 p-4 text-center text-2xl font-bold">
                <p>
                    {{ $user['id'] }}
                </p>
            </td>
            <td class="border border-spacing-2 border-gray-500 py-4 px-8 text-2xl font-bold">
                <p>
                    {{ $user['name'] }}
                </p>
            </td>
            <td class="border border-spacing-2 border-gray-500 p-4">
                <p>
                    {{ $user['email'] }}
                </p>
            </td>
            <td class="border border-spacing-2 border-gray-500 p-4 text-center">
                <p>
                    {{ $user['created_at'] }}
                </p>
            </td>
        </tr>
    </table>
@endsection

@extends('layout')

@section('content')
    <h2 class="text-3xl font-bold mt-4 pl-2">User {{ $user['id'] }}</h2>

    <table class="border-collapse border border-slate-500 w-full mt-4">
        <tr>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Name</th>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Email</th>
            <th class="border border-slate-600 text-2xl w-1/4 p-2">Joined</th>
        </tr>
        <tr>
            <td class="border border-slate-600 p-2">
                <p>
                    {{ $user['name'] }}
                </p>
            </td>
            <td class="border border-slate-600 p-2">
                <p>
                    {{ $user['email'] }}
                </p>
            </td>
            <td class="border border-slate-600 p-2">
                <p>
                    {{ $user['created_at'] }}
                </p>
            </td>
        </tr>
    </table>
@endsection

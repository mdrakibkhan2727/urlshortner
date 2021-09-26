@extends('layout.default')
@section('title')
    Shorten URL
@endsection
@section('content')
    <div class="max-w-md w-full space-y-8">
        <div class="max-w-md mx-auto  bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div >
                <div>
                    <h3 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Enter Shorten URL
                    </h3>
                </div>
                <form class="m-5  space-y-8" method="POST" action="{{route('shorten.store')}}" >
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm -space-y-px">

                        <div>
                            <label for="url_link" class="sr-only"> Enter  your  url</label>
                            <input id="url_link" name="link" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Enter your url">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        </span>
                            Shorten
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-col ml-3">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Base Url
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Short Url
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($shortLinks as $shortLink)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$shortLink->link}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"><a href="{{route('shorten.link',$shortLink->code)}}" target="_blank">{{route('shorten.link',$shortLink->code)}}</a></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                       <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      Active
                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

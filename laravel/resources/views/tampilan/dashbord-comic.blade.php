@extends('layouts.main')

@section('title', 'Dashboard')

@section('body')
    <!-- Dashboard Content -->
    <div class="flex flex-col">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Dashboard</h1>
        
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-medium text-gray-700">Total Books</h2>
                <p class="text-3xl font-bold text-gray-900">123</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-medium text-gray-700">Total Categories</h2>
                <p class="text-3xl font-bold text-gray-900">15</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-medium text-gray-700">Total Publishers</h2>
                <p class="text-3xl font-bold text-gray-900">7</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-medium text-gray-700 mb-4">Recent Activity</h2>
            <ul class="space-y-4">
                <li class="border-b pb-2">
                    <p class="text-gray-800">Added new book: <strong>The Great Gatsby</strong></p>
                    <p class="text-sm text-gray-500">2 hours ago</p>
                </li>
                <li class="border-b pb-2">
                    <p class="text-gray-800">Updated category: <strong>Fiction</strong></p>
                    <p class="text-sm text-gray-500">1 day ago</p>
                </li>
                <li class="border-b pb-2">
                    <p class="text-gray-800">Removed publisher: <strong>Penguin</strong></p>
                    <p class="text-sm text-gray-500">3 days ago</p>
                </li>
            </ul>
        </div>
    </div>
@endsection

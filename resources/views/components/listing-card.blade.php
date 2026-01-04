@props(['listing'])

<x-card>


    <div class="flex items-start gap-4">
        <!-- Logo Container -->
        <div class="flex-shrink-0">
            <img class="w-24 h-24 rounded-lg object-cover border border-blue-200"
                src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.jpg')}}"
                alt="{{$listing->company}} logo" />
        </div>

        <!-- Content -->
        <div class="flex-1">
            <!-- Title and Badge -->
            <div class="mb-2">
                <div>
                    <h3 class="text-lg font-bold text-gray-900">
                        <a href="/listings/{{$listing->id}}"
                            class="hover:text-blue-600 transition-colors">{{$listing->title}}</a>
                    </h3>
                    <p class="text-sm text-gray-700">{{$listing->company}}</p>
                </div>

            </div>

            <!-- Tags -->
            <div class="mb-5">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </div>

            <!-- Location -->
            <div class="flex items-center gap-2 text-gray-600 text-sm mb-4">
                <i class="fa-solid fa-location-dot text-blue-500"></i>
                <span>{{$listing->location}}</span>
            </div>

            <!-- Description Preview -->
            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                {{Str::limit($listing->description ?? 'Looking for talented individuals to join our growing team', 100)}}
            </p>

            <!-- View Button -->
            <a href="/listings/{{$listing->id}}"
                class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm group/btn">
                <span>View Position</span>
                <i class="fa-solid fa-arrow-right ml-1.5 group-hover/btn:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>

</x-card>
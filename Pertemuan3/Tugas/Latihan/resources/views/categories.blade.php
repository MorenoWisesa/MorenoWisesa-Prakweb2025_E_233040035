<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <h1 style="font-size: 26px; font-weight: bold; margin-bottom: 30px; color: #2c3e50; border-bottom: 2px solid #ccc; padding-bottom: 10px;">
        Daftar Semua Kategori
    </h1>

    @foreach ($categories as $category)
        <article style="margin-bottom: 35px; border: 1px solid #ddd; border-left: 6px solid #3498db; padding: 20px; border-radius: 6px; background-color: #f9f9f9; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
            
            {{-- Bagian Header Kategori --}}
            <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; border-bottom: 1px dashed #eee; padding-bottom: 10px;">
                <a href="#" style="color: #3498db; text-decoration: none;">
                    {{ $category->name }} 
                </a>
                <span style="font-size: 13px; color: #666; font-weight: normal; margin-left: 10px;">({{ $category->posts->count() }} Post Terkait)</span>
            </h2>

            {{-- Bagian Daftar Posts Terbaru --}}
            @if ($category->posts->count() > 0)
                <h3 style="font-size: 16px; font-style: italic; margin-top: 15px; margin-bottom: 10px; color: #555;">5 Post Terbaru:</h3>
                
                <div style="padding-left: 15px;">
                @foreach ($category->posts->take(5) as $post)
                    <div style="margin-bottom: 15px; padding: 10px; border-bottom: 1px solid #eee;">
                        
                        {{-- Judul Post --}}
                        <p style="font-size: 16px; margin: 0 0 4px 0;">
                            <a href="#" style="color: #333; text-decoration: none; font-weight: 500;">
                                ➡️ {{ $post->title }}
                            </a>
                        </p>
                        
                        <p style="font-size: 12px; color: #7f8c8d; margin: 0;">
                            Oleh: **{{ $post->user->name }}** | Terbit: {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                @endforeach
                </div>
            @else
                <p style="color: #999; margin-left: 15px;">Belum ada postingan di kategori ini.</p>
            @endif

        </article>
    @endforeach
    
</x-layout>
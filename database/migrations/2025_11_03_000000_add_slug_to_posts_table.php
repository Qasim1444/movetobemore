<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('image');
        });

        // Backfill slugs for existing posts
        $posts = DB::table('posts')->select('id', 'title', 'slug')->get();
        foreach ($posts as $post) {
            if (!empty($post->slug)) {
                continue;
            }
            $base = Str::slug($post->title ?? 'post-'.$post->id);
            $slug = $base;
            $i = 2;
            while (DB::table('posts')->where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $base.'-'.$i;
                $i++;
            }
            DB::table('posts')->where('id', $post->id)->update(['slug' => $slug]);
        }
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'slug')) {
                $table->dropUnique(['slug']);
                $table->dropColumn('slug');
            }
        });
    }
};



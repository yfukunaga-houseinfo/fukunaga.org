<?php get_header(); ?>

<main class="container mx-auto py-20 px-4">
    <h1 class="text-2xl mb-12 tracking-widest text-center">LATEST NEWS</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="flex flex-col">
                <a href="<?php the_permalink(); ?>" class="img-zoom mb-4">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-64 object-cover']); ?>
                    <?php else : ?>
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center text-gray-400">No Image</div>
                    <?php endif; ?>
                </a>
                <time class="text-xs mb-2 opacity-70"><?php echo get_the_date(); ?></time>
                <h2 class="text-lg mb-2 underline decoration-1 underline-offset-4">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="text-sm leading-relaxed opacity-80">
                    <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

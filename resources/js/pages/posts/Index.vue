<script setup lang="ts">
import Card from '@/components/ui/card/Card.vue';
import CardContent from '@/components/ui/card/CardContent.vue';
import CardHeader from '@/components/ui/card/CardHeader.vue';
import CardTitle from '@/components/ui/card/CardTitle.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

interface Post {
    id: number;
    title: string;
    body: string;
}

defineProps<{
    posts: Post[];
}>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Posts',
        href: '/posts',
    },
];
</script>

<template>
    <Head title="Posts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="grid gap-4 p-4 lg:grid-cols-2">
            <Card v-for="post in posts" :key="post.id">
                <CardHeader>
                    <CardTitle>{{ post.title }}</CardTitle>
                </CardHeader>
                <CardContent>{{ post.body }}</CardContent>
            </Card>
        </div>
    </AppLayout>
</template>

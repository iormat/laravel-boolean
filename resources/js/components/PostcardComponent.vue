<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5" v-for="postcard in postcards" :key="postcard.id">
                    <div class="card-header">{{postcard.sender}}</div>

                    <div class="card-body">
                        <img v-if="postcard.image" :src="'/storage/assets/img/postcards/' + postcard.image" :alt="postcard.title">
                        <p>{{postcard.text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                postcards: [],
            }
        },
        mounted() {
            // get all postcards
            axios.get('/api/postcards/get')
                .then((r => {
                    this.postcards = r.data
                }))
                .catch(err => console.error(err))
        }
    }
</script>

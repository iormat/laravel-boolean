<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5" v-for="postcard in postcards" :key="postcard.id">
                    <div class="card-header">{{postcard.sender}}</div>

                    <div class="card-body">
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

            console.log('Component mounted.')
        }
    }
</script>

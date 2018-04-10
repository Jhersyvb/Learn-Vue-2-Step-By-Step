<template>
    <div class="message">
        <div class="message-header">
            Push to the Stream...
        </div>

        <div class="message-body">
            <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
                <div class="field">
                    <div class="control">
                        <textarea name="" id="" class="textarea" placeholder="I have something to say..." v-model="form.body"></textarea>
                    </div>
                    <span class="help is-danger"
                          v-if="form.errors.has('body')"
                          v-text="form.errors.get('body')"></span>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({ body: '' })
            }
        },

        methods: {
            onSubmit() {
                this.form
                    .post('/statuses')
                    .then(status => this.$emit('completed', status))
                    .catch(data => console.log(data));
            }
        }
    }
</script>

<template>
    <jet-action-section>
        <template #title>
            Eliminar equipo
        </template>

        <template #description>
            Eliminar permanentemente este equipo.
        </template>

        <template #content>
            <div class="max-w-xl text-sm text-gray-600">
                Una vez que se elimina un equipo, todos sus recursos y datos se eliminarán de forma permanente. Antes de eliminar este equipo, descargue cualquier dato o información sobre este equipo que desee conservar.
            </div>

            <div class="mt-5">
                <jet-danger-button @click="confirmTeamDeletion">
                    Eliminar equipo
                </jet-danger-button>
            </div>

            <!-- Delete Team Confirmation Modal -->
            <jet-confirmation-modal :show="confirmingTeamDeletion" @close="confirmingTeamDeletion = false">
                <template #title>
                    Eliminar equipo
                </template>

                <template #content>
                    ¿Está seguro de que desea eliminar este equipo? Una vez que se elimina un equipo, todos sus recursos y datos se eliminarán de forma permanente.
                </template>

                <template #footer>
                    <jet-secondary-button @click="confirmingTeamDeletion = false">
                        Cancelar
                    </jet-secondary-button>

                    <jet-danger-button class="ml-3" @click="deleteTeam" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Eliminar equipo
                    </jet-danger-button>
                </template>
            </jet-confirmation-modal>
        </template>
    </jet-action-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetActionSection from '@/Jetstream/ActionSection.vue'
    import JetConfirmationModal from '@/Jetstream/ConfirmationModal.vue'
    import JetDangerButton from '@/Jetstream/DangerButton.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        props: ['team'],

        components: {
            JetActionSection,
            JetConfirmationModal,
            JetDangerButton,
            JetSecondaryButton,
        },

        data() {
            return {
                confirmingTeamDeletion: false,
                deleting: false,

                form: this.$inertia.form()
            }
        },

        methods: {
            confirmTeamDeletion() {
                this.confirmingTeamDeletion = true
            },

            deleteTeam() {
                this.form.delete(route('teams.destroy', this.team), {
                    errorBag: 'deleteTeam'
                });
            },
        },
    })
</script>

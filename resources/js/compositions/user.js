import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

export const users = (name) => {
	const state = reactive({
		form: {
			name: '',
			email: '',
			password: ''
		}
	});

	const store = () => {
		Inertia.post(`/users`, state.form);
	};

	return {
		state,
		store
	};
};

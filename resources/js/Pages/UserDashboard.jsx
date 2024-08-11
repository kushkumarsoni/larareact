import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function UserDashboard({ auth }) {
    return (
        <AuthenticatedLayout user={auth.user} >
            <Head title="My Dashboard" />
            <div>My Dashboard</div>
        </AuthenticatedLayout>
    );
}

export {};
declare global {
    export namespace inertia {
        export interface Props {
            user: {
                id: number;
                name: string;
                email: string;
                current_team_id?: number;
                profile_photo_path?: string;
                profile_photo_url?: string;
                membership: {
                    team_id: number;
                    team: Team;
                    role: string;
                };
                created_at: Date;
                updated_at: Date;
            };
            jetstream: {
                [key: string]: boolean;
            };
            errorBags: unknown;
            errors: unknown;
        }
    }
}

export type PageProps = {
    auth: {
        user: {
            id: number;
            name: string;
            email: string;
            current_team_id?: number;
            profile_photo_path?: string;
            profile_photo_url?: string;
            current_team: Team;
        }
    },
    membership: {
        team_id: number;
        team: Team;
        role: string;
    },
    flash: {
        message: string;
    },
    teams: Array<{
        id: number;
        name: string;
    }>;
    jetstream: {
        [key: string]: boolean;
    };
    errorBags: unknown;
    errors: unknown;
};

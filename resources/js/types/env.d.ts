/// <reference types="vite/client" />

interface ImportMetaEnv {
    // ... could include environment variables

    /** Example */
    // readonly VITE_STRIPE_API_KEY: string;
}

interface ImportMeta {
    readonly env: ImportMetaEnv;
}

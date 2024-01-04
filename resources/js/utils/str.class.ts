export class Str {
    static after(str: string, character: string): string {
        if (character.length !== 1) {
            throw new Error("The 'character' parameter should be a single character.");
        }

        const index = str.indexOf(character);

        if (index === -1 || index === str.length - 1) {
            // Character not found or is the last character in string
            return "";
        }

        // Return substring after the character
        return str.substring(index + 1);
    }
}

export const after = Str.after;

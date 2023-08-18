import defaultTheme from "tailwindcss/defaultTheme";
import colors from "tailwindcss/colors";
import forms from "@tailwindcss/forms";


/** @type {import('tailwindcss').Config} */
export default {
	// prefix: 'tw-',
	// darkMode: 'class',

	content: [
		"./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
		"./storage/framework/views/*.php",
		"./resources/views/**/*.blade.php",
		"./resources/js/**/*.vue",
		"./node_modules/primevue/**/*.{vue,js,ts,jsx,tsx}",
	],

	theme: {
		extend: {
			colors: {
				font: {
					DEFAULT: colors.neutral[950],
					dark: colors.neutral[950],
					light: colors.neutral[100],
					'on-bg-light': colors.neutral[950],
					'on-bg-dark': colors.neutral[100],
					'on-accent-light': colors.neutral[950],
					'on-accent-dark': colors.neutral[100],
				},

				background: {
					dark: {
						950: colors.neutral[950],
						900: colors.neutral[900],
						800: colors.neutral[800],
						700: colors.neutral[700],
					},
					light: {
						50: colors.neutral[50],
						100: colors.neutral[100],
						200: colors.neutral[200],
						300: colors.neutral[300],
					},
				},

				primary: {
					dark: {
						100: colors.neutral[950],
						200: colors.neutral[800],
					},
					light: {
						100: colors.neutral[100],
						200: colors.neutral[200],
					},
				},

				accent: {
					dark: {
						100: colors.indigo[400],
						200: colors.indigo[500],
					},
					light: {
						100: colors.indigo[400],
						200: colors.indigo[500],
					},
				}
			},

			fontFamily: {
				sans: ["Figtree", ...defaultTheme.fontFamily.sans],
			},
			screens: {
				xs: "320px",
				sm: "640px",
				md: "768px",
				lg: "1024px",
				xl: "1280px",
				"2xl": "1440px",
			},
		},
	},
	plugins: [
		forms({
			strategy: "base", // only generate global styles
			// strategy: "class", // only generate classes
		}),
	],
};

